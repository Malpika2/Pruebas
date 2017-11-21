<div id="page-content-wrapper" style="padding: 0px; margin: 0px">
    <div id="page-content">
		<div id="signature-pad" class="signature-pad">
		    <div class="signature-pad--body col-md-7">
		      <canvas width="600" height="400" style="border:solid red 1px"></canvas>
		    </div>
		    <div class="signature-pad--footer col-md-5">
		      <div class="description">Opciones:</div>

		      <div class="signature-pad--actions">
		        <div class="col-md-12">
		          <button type="button" class=" clear btn-sm btn-outline-info col-md-4" data-action="clear">Limpiar</button>
		          <button type="hidden" class=" disabled btn-sm btn-outline-info col-md-4" data-action="change-color">Cambiar color</button>
		          <button type="button" class="  btn-sm btn-outline-info col-md-4" data-action="undo">Deshacer</button>

		        </div>
		        <div class="col-md-12">
		          <button type="button" class=" btn-sm btn-outline-success col-md-4" data-action="save-png">Guardar como PNG</button>
		          <button type="button" class=" btn-sm btn-outline-success col-md-4" data-action="save-jpg" >Guardar como JPG</button>
		          <button type="button" class=" btn-sm btn-outline-success col-md-4" data-action="save-svg" >Guardar como SVG</button>
		        </div>
		      </div>
		    </div>
		</div>
    </div>
</div>
  <script src="<?php echo base_url('js/signature_pad.js'); ?>"></script>
  <script src="<?php echo base_url('js/app.js'); ?>"></script>