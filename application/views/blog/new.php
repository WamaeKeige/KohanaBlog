<h2>Write a new Post</h2>
<?php if($errors): ?>
<ul>
<?php foreach($errors as $error): ?>
<li><?php echo $error ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
<?php
print_r($errors);

echo Form::open();
echo Form::label('title', 'Post Title');
echo Form::input('title');

echo Form::label('body', 'Post Body');
echo Form::textarea('body');
echo Form::submit('submit', 'Save Post');
echo  Form::close();

?>
