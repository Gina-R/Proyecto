
<div class="form-inline">

    <label for="origen">Origen: </label>
    &nbsp; &nbsp; 
    <input type="text" id="origen"/>
    &nbsp; &nbsp; &nbsp; &nbsp; 
    <label for="destino">Destino: </label>
    &nbsp; &nbsp; 
    <input type="text" id="destino"/>
    &nbsp; &nbsp; &nbsp; &nbsp; 
    <button class="btn btn-primary" id="buscar" style="width: 80px;"onclick="buscador_viajes('#resultado',$('#origen').val(),$('#destino').val()); return false;">Buscar</button>

</div>

<br/><br/>

<div id="resultado">



</div>

