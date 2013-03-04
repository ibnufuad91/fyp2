<?php
echo $this->Form->create('User');
echo '<div class="field g2">';

echo $this->Form->input('User.name', array('label'=>'Full Name', 'div'=>'entry'));
echo '</div><div class="cf"></div><div class="field g2">';

echo $this->Form->input('User.no_ic', array('label'=>'IC No.', 'div'=>'entry'));
echo '</div><div class="cf"></div><div class="field g2">';

echo $this->Form->input('User.email', array('label'=>'Email', 'div'=>'entry', 'style'=>'width:100%;box-shadow: inset 0 2px 0 #e2e2e2, 1px 1px 2px rgba(0, 0, 0, 0.15); height: 27px;border: 1px solid #c1c1c1;'));
echo '</div><div class="cf"></div><div class="field g2">';

echo $this->Form->file('User.image', array('div'=>'uploader','class'=>"custom-file  {fileDefaultText: 'Attach a file', fileBtnText: 'click to load'}"));
echo '</div><div class="cf"></div>';

echo '<div class="field g1">';
echo $this->Form->button('Save', array('type'=>'submit','class'=>'bt orange large'));
echo '</div>';
echo $this->Form->end();
?>
