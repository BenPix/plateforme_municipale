<section class="mbr-section form3 cid-r1fWFz2mbZ" id="form3-c">

	<div class="row py-2 justify-content-center">
		<div class="col-12 col-lg-6  col-md-8 ">
			<div style="border: solid black 2px; background-color: #A9A9A9; font-size: 30px; text-align: center;">DESCRIPTION DU SOUS-PÔLE</div>
			<br><br><br><br>
		</div>
	</div>
	<div style="width: 60%;margin: 0 auto;">
		<?php
		echo validation_errors();

		$this->table->set_heading($heading);
		$tmpl = array(
			'table_open' => '<table border="solid" cellpadding="4" cellspacing="0" class="tab-pole">',
			'thead_open' => '<thead style="background-color: #DCDCDC; border: solid black 2px;">',
		);

		$this->table->set_template($tmpl);

		$this->table->function = 'htmlspecialchars';

		$this->table->set_columns_for_callback_function(array(0, 1));

		echo $this->table->generate($tab);
		?>
	</div>

</section>
<div class="row py-2 justify-content-center">
	<div class="col-12 col-lg-6  col-md-8 ">

		<?php
		echo form_open('gestion/sous_pole_update_go/'.$id);
		echo form_fieldset('<u>Modification du Sous-Pôle</u>');

		echo form_label('<u>Désignation : </u>');
		$designation = array(
			'name' => 'designation',
			'value' => set_value('designation', $sous_pole->nom, FALSE),
			'required' => '',
			'class' => 'form-control'
		);
		echo form_input($designation).'<br>';

		echo form_label('<u>Pôle Mère : </u>');
		echo form_dropdown('pole_mere', html_escape($pole), $sous_pole->pole_mere, array('class' => 'form-control')).'<br>';

		echo form_label('<u>Choisir la couleur en rapport avec ce service pour la vision dans l\'historique :</u>').'<br>';
		$couleur = array(
			'name' => 'couleur',
			'value' => set_value('couleur', $sous_pole->couleur, FALSE),
			'type' => 'color',
			'style' => 'width:50px;height:50px;'
		);
		echo form_input($couleur).'<br><br>';

		$modifier = array(
			'name' => 'modifier',
			'value' => 'Modifier',
			'type' => 'submit',
			'class' => 'btn btn-primary  display-4'
		);
		echo form_submit($modifier);

		$annuler = array(
			'name' => 'modifier',
			'value' => 'Annuler',
			'type' => 'submit',
			'class' => 'btn btn-primary  display-4',
			'style' => 'float:right'
		);
		echo form_submit($annuler).'<br><br>';

		echo form_label('<u>Affecter un utilisateur à ce sous-pole :</u>').'<br>';
		echo form_dropdown('user', html_escape($users), '', array('class' => 'form-control')).'<br>';

		$affecter = array(
			'name' => 'modifier',
			'value' => 'Affecter',
			'type' => 'submit',
			'class' => 'btn btn-primary  display-4',
			'style' => 'float:left'
		);
		echo form_submit($affecter);

		echo form_submit($annuler).'<br><br><br>';

		echo form_label('<u>Désaffecter un utilisateur de ce sous-pole :</u>').'<br>';
		echo form_dropdown('desaffecter', html_escape($affectations), '', array('class' => 'form-control')).'<br>';

		$desaffecter = array(
			'name' => 'modifier',
			'value' => 'Désaffecter',
			'type' => 'submit',
			'class' => 'btn btn-primary  display-4',
			'style' => 'float:left'
		);
		echo form_submit($desaffecter);

		echo form_submit($annuler).'<br><br>';
		
		echo form_close();
		?>
	</div>
</div>