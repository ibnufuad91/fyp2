<?php
debug($this->request->data);
// echo $this->Html->script('jquery-ui-1.10.1.custom.min');
// echo $this->Html->css('ui-lightness/jquery-ui-1.10.1.custom.min');
echo $this->Form->create('Academic');
echo '<div class="field g2">';
echo $this->Form->input('institute', array('label'=>'Institusi', 'div'=>'entry'));
echo '</div><div class="cf"></div><div class="field g2">';
echo $this->Form->input('year_in', array('type'=>'text', 'label'=>'Tarikh Masuk', 'div'=>'entry'));
echo '</div><div class="cf"></div><div class="field g2">';
echo $this->Form->input('year_out', array('type'=>'text', 'label'=>'Tarikh Keluar', 'div'=>'entry'));
echo '</div><div class="cf"></div>';

echo '<div class="field g1">';
echo $this->Form->button('Simpan', array('type'=>'submit','class'=>'bt orange large'));
echo '</div>';

echo $this->Form->end();
?>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('[id^="AcademicYear"]').datepicker();
		$('[id^="AcademicYear"]').datepicker("option", "dateFormat", "yy-mm-dd" );
	});
</script>