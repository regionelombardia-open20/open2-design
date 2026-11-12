/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\design
 * @author    Aria S.p.A. <protocollo@pec.ariaspa.it>
 * @license   GNU General Public License v3.0 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @link      https://www.ariaspa.it/
 *
 * This file is part of OPEN 2.0.
 *
 * OPEN 2.0 is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPEN 2.0 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OPEN 2.0. If not, see <https://www.gnu.org/licenses/>.
 */

var refreshSelectElement = function (idToRefresh = '') {
    var selectElement = $('#' + idToRefresh);
    $(selectElement)
            .selectpicker('refresh')
            .on('changed.bs.select', onSelectChange);
};

var disableSelectElement = function (elementId = '') {
    var selectElement = $('#' + elementId);
    var wrapperElement = $('#' + elementId + '-wrapper');
    selectElement.prop('disabled', 'disabled');
    wrapperElement.addClass('disabled');
    refreshSelectElement(elementId);
};

var enableSelectElement = function (elementId = '') {
    var selectElement = $('#' + elementId);
    var wrapperElement = $('#' + elementId + '-wrapper');
    $(selectElement).prop('disabled', false);
    wrapperElement.removeClass('disabled');
    refreshSelectElement(elementId);
};

let onSelectChange = function () {
    $('.dropdown-menu li.selected')
            .find('input[type="checkbox"]')
            .prop('checked', true);
    $('.dropdown-menu li:not(.selected)')
            .find('input[type="checkbox"]')
            .prop('checked', false)
};


/* Allows to rewrite options dynamically with an object in the form of */
jQuery.fn.setOptionsToSelect = function (optionsData) {
    var selectElement = $(this).find('select');

    /* Destroying selectElement */
    $(selectElement)
            .off('changed.bs.select')
            .selectpicker('destroy')
            .empty();

    /* Appending options according to the optionsData object */
    optionsData.forEach(function (x) {
        $(selectElement).append(
                $('<option>', {
                    value: x.value,
                    text: x.text,
                    selected: x.selected,
                })
                )
    });

    /* Refreshing selectElement */
    $(selectElement)
            .selectpicker('refresh')
            .on('changed.bs.select', onSelectChange);

    return this
};


var addOptionsByDataActiion = function (owner) {

    var inputId = owner.attr('id');
    var action = owner.attr('data-action');
    var relatedId = owner.attr('data-releted');
    var related = jQuery('#' + relatedId);

    var mydata = {
        related_value: related ? related.val() : ''
    };

    /*CSRF Workaround*/
    mydata[csrfParam] = csrValue;

    if (!action) {
        return false;
    }

    jQuery('#spinner-' + inputId).toggle();

    jQuery.post({
        url: action,
        type: 'post',
        data: mydata,
        success: function (data, textStatus, jqXHR) {

            if (textStatus == 'success') {
                var options = [];
                jQuery.each(data, function (index, element) {
                    var myValue = element.value;
                    var label = element.label;
                    if (myValue == owner.attr('data-valued')) {
                        options.push({value: myValue, text: label, selected: true});
                    } else {
                        options.push({value: myValue, text: label, selected: false});
                    }
                });
                jQuery('#' + inputId + '-wrapper').setOptionsToSelect(options);
                enableSelectElement(inputId);
            }

        },
        complete: function () {
            jQuery('#spinner-' + inputId).toggle();
        },
        error: function (data, textStatus, jqXHR) {
            /* 	console.log(data);
             console.log(textStatus);
             console.log(jqXHR);*/
        }

    });

};

jQuery('.rellable-drop').each(function (k, v) {
    var reledSelector = '#' + jQuery(this).attr('data-releted');
    var relatedElement = jQuery(reledSelector);
    if (relatedElement.length) {
        if (relatedElement.val() && relatedElement.val().length) {
            addOptionsByDataActiion(jQuery(this));
        } else if(relatedElement.val()) {
            disableSelectElement(relatedElement.attr('id')); 
        }

        var that = jQuery(this);

        relatedElement.change(function () {
            addOptionsByDataActiion(that);
        });
    }/* else {
     addOptionsByDataActiion();
     }*/
});