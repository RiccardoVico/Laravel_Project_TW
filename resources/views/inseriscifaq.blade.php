
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/registration_form.css">

<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(function () {
    var actionUrl = "{{ route('insfaq') }}";
    var formId = 'insfaq';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#insfaq").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

        <title>Inserisci FAQ</title>
    </head>
    <body>
        <div class="faq_container">
            <div class="title">InserisciFaq</div>
            {{ Form::open(array('route' => 'insfaq','id' => 'insfaq', 'class' => 'contact-form')) }}

            <div class="faq-details">

                <div class="input-box_faq">
                    {{ Form::label('domanda', 'domanda', ['class' => 'label-input']) }}
                    {{ Form::textarea('domanda','', ['class' => 'input','id' => 'domanda']) }}
                </div>

                <div class="input-box_faq">
                    {{ Form::label('risposta', 'rispostacompleta', ['class' => 'label-input']) }}
                    {{ Form::textarea('risposta', '', ['class' => 'input','id' => 'risposta']) }}
                </div>

                <div class="input-box_faq">
                    {{ Form::label('categoria', 'rispostabreve', ['class' => 'label-input']) }}
                    {{ Form::textarea('categoria', '', ['class' => 'input','id' => 'categoria']) }}
                </div>

            </div>

            <div class="button">
                <input type="submit" value="inseriscifaq">
            </div>

            {{ Form::close() }}
        </div>
    </body>
</html>