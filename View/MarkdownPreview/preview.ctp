<?php if (!empty($this->request->data)) : ?>
<?= $this->Markdown->render($this->request->data['t']); ?>
<?php else : ?>
<?= $this->Form->create(null); ?>
<?= $this->Form->input(null, array('label'=>false, 'name'=>'t', 'type'=>'textarea', 'rows'=>15, 'class'=>'wide')); ?>
<?= $this->Form->end(__('Preview')); ?>
<?php endif; ?>