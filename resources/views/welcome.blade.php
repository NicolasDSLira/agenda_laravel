<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda</title>

        <!-- Styles -->

        <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

       

    </head>
    <body>

        <div class="search_bar">

            <form id="search_form">

            @csrf

                <label for="search_bar">Pesquisar:</label>

                <input type="text" class="search_bar" id="search_bar">

                <button class="search_btn" id="search_btn">Search</button>

            </form>
        </div>

        <div id="result"></div>

        <section class="ctt">
            
        
@foreach($contato as $con)

<div class="card_ctt">
    <table>
        <tr>
            <td class="name">
                <p class="name">Nome: {{$con->nome_contato}}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="email">Email: {{$con->email_contato}}</p>
            </td>
            <td> 
                <p class="tel">Telefone: {{$con->numero_contato}}</p>
            </td>
            <td>
                <button 
                    class="delete" 
                    data-id="{{$con->id_contato }}">
                    EXCLUIR
                </button>
            </td>
        </tr>
    </table>
            
           
        </div>

        @endforeach
            
          
        </section>

        <div id="add_ctt" data-href="{{url('/cadastrar')}}">
            <img src="{{url('assets/img/1x/outline_add_white_24dp.png')}}">
        </div>
    </body>
</html>

<script src="{{url('assets/js/script.js')}}"></script>