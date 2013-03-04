<?php
echo $this->Form->create('Member');
echo $this->Form->input('Member.email');
echo $this->Form->input('Member.password');
echo $this->Form->button('Login', array('class'=>'bt green'));
echo $this->Form->end();