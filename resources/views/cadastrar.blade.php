<!-- cadastrar.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar contato</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.cadastro.css')}}">
        <!-- Mascara telefone -->
        <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    </head>
    <body>
    	<section class="form">
    		<form action="{{url('/cadastrar/inserir')}}" method="POST" id="form_cadastro_ctt">
                @csrf
    			<fieldset>
    				<legend>Criar contato</legend>
    				<div class="container_input">
    					<label>Nome:</label>
    						<input 
    							type="text" 
    							name="name" 
    							class="input_ctt" 
    							id="form_name_ctt"/>       
    				</div>
                     <div class="erro" id="erro_name"></div>
    				<div class="container_input">
    					<label>E-mail:</label>
    						<input 
    							type="email" 
    							name="email"
    							class="input_ctt"
    							id="form_email_ctt"/>
    				</div>
                    <div class="erro" id="erro_email"></div>
    				<div class="container_input">
    					<label>Telefone:</label>
    						<input 
    							attrname="telephone1" 
                                name="telefone" 
                                id="form_number_ctt" 
                                type="text" 
                                class="input_ctt">
    				</div>
                    <div class="erro" id="erro_number"></div>
    				<div class="container_input">
    					<input 
    						type="submit" 
    						name="Submit" 
    						value="Criar" 
    						class="form_btn">	
    				</div>
    			</fieldset>
    		</form>
    	</section>
    </body>
</html>

<script src="{{url('assets/js/script.cadastro.js')}}"></script>

 <script>
    function inputHandler(masks, max, event) {
    var c = event.target;
    var v = c.value.replace(/\D/g, '');
    var m = c.value.length > max ? 1 : 0;
    VMasker(c).unMask();
    VMasker(c).maskPattern(masks[m]);
    c.value = VMasker.toPattern(v, masks[m]);
            }

    var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
    var tel = document.querySelector('input[attrname=telephone1]');
    VMasker(tel).maskPattern(telMask[0]);
    tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

    var docMask = ['999.999.999-999', '99.999.999/9999-99'];
    var doc = document.querySelector('#doc');
    VMasker(doc).maskPattern(docMask[0]);
    doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);
</script>

