@extends('layouts.user')



@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Application From</h4>
                        </div>
                        <div class="card-body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Personal Information</h3>
                                <fieldset>
                                    @include('user.application.form.personal')
                                </fieldset>
                                <h3>Educational Information</h3>
                                <fieldset>
                                    @include('user.application.form.educational')
                                </fieldset>
                                <h3>Banking Information</h3>
                                <fieldset>
                                    @include('user.application.form.banking')
                                </fieldset>
                                <h3>Travel Information</h3>
                                <fieldset>
                                    @include('user.application.form.travel')
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script type="text/javascript" src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bundles/jquery-validation/dist/jquery.validate.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/js/page/form-wizard.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>

<script type="text/javascript">
    //Advanced form with validation
    var form = $('#wizard_with_validation').show();
    form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',
        onInit: function(event, currentIndex) {

            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex > newIndex) {
                return true;
            }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Good job!", "Submitted!", "success");
        }
    });

    form.validate({
        highlight: function(input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function(input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function(error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });
</script>
