'use strict';
        $(function () {
            // Set CSRF token in AJAX request headers
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });

            
            $('#wizard_with_validation').steps({
                headerTag: 'h3',
                bodyTag: 'fieldset',
                transitionEffect: 'slideLeft',
                onInit: function (event, currentIndex) {
                    var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
                    var tabCount = $tab.length;
                    $tab.css('width', (100 / tabCount) + '%');
                    setButtonWavesEffect(event);
                },
                onStepChanging: function (event, currentIndex, newIndex) {
                    if (currentIndex > newIndex) { return true; }
                    if (currentIndex < newIndex) {
                        $('#wizard_with_validation').find('.body:eq(' + newIndex + ') label.error').remove();
                        $('#wizard_with_validation').find('.body:eq(' + newIndex + ') .error').removeClass('error');
                    }
                    $('#wizard_with_validation').validate().settings.ignore = ':disabled,:hidden';
                    return $('#wizard_with_validation').valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex) {
                    setButtonWavesEffect(event);
                },
                onFinishing: function (event, currentIndex) {
                    $('#wizard_with_validation').validate().settings.ignore = ':disabled';
                    return $('#wizard_with_validation').valid();
                },
                onFinished: function (event, currentIndex) {
                    // alert("Good job!", "Submitted!", "success");
                    $('#wizard_with_validation').submit(); 
                }
            });

            $('#wizard_with_validation').validate({
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                },
                rules: {
                    'confirm': {
                        equalTo: '#password'
                    }
                }
            });

            function setButtonWavesEffect(event) {
                $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
                $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
            }
        });
