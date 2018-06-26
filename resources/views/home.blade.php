@extends('layouts.layout')

@section('content')

<style type="text/css">
    
    .box-block{
        position: relative;
        width: 100%;
        height: auto;
        background: #fff;
        border: solid 1px #cccccc;
        text-align: center;
        padding: 40px 0;
        font-size: 20px;
        transition: all .500s;
        border-radius: 3px;
    }

    .box-block .icon{
        position: absolute;
        top: 10px;
        left: 15px;
        margin: auto;
    }

    .box-block .icon span{
        font-size: 14px;
        color: #5a5a5a;
    }

    .box-block span{
        display: block;
        font-size: 45px;
        font-weight: bold;
        margin: 5px 0;
    }

    .box-block button{
        width: 80%;
        display: block;
        background: linear-gradient(to bottom right, #0f62ce, #256ece);
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 7px 0;
        margin: 20px auto 0 auto;
        font-size: 14px;
        transition: all 2s;
    }

    .box-block button a{
        text-decoration: none;
        color: #fff;
    }

    .box-block:hover{
        box-shadow: 0 15px 15px rgba(0,0,0,0.2);
    }



</style>

<div class="row box">
    
    <div class="col-md-4 box">
        <div class="box-block">
            <div class="icon"><span class="icon-bookmark"></span></div>
            Total de
            <span>{{ $users }}</span> 
            <strong>usuários</strong> cadastrados
            <button type="button" onclick="redirect('users')">Ver todos</button>
        </div>
    </div>
    <div class="col-md-4 box-double">
        <div class="box-block">
            <div class="icon"><span class="icon-bookmark"></span></div>
            Total de
            <span>{{ $seeks }}</span> 
            <strong>solicitações</strong> cadastradas
            <button type="button" onclick="redirect('seeks')">Ver todos</button>
        </div>
    </div>

</div>

@endsection

@push('script-add')
    <script type="text/javascript">
        
        function redirect(url)
        {
            window.location.href = $("meta[name=url]").attr("content") + '/' + url;
        }

    </script>
@endpush