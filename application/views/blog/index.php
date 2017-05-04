<h2>My List of Blog Posts</h2>
<?php echo html::anchor('blog/new', 'Post a new Blog')?>
<?php foreach($posts as $post): ?>
</hr>

  <h4><?php  echo html::entities($post->title) ?></h4>
  <p><?php echo html::entities ($post->body) ?></p>
<?php endforeach; ?>
