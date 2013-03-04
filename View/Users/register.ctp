<?php
echo $this->Form->create('User');
echo $this->Form->input('User.name');
echo $this->Form->input('User.no_ic');
echo $this->Form->input('User.email');
echo $this->Form->input('User.password');
echo $this->Form->end('Register');