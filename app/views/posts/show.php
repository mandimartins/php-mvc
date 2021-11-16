<?php require APPROOT . '/views/includes/header.php'; ?>

<a href="<?php echo URLROOT; ?>posts"
class="btn btn-dark mb-3"><svg xmlns="http://www.w3.org/2000/svg"
width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd"
  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1
  0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707
  8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg> Back</a>
<br>
<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>
<p><?php echo $data['post']->body; ?></p>

<?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
  <hr>

  <form class="d-flex justify-content-between mb-5" action="<?php echo URLROOT; ?>posts/delete/<?php echo $data['post']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
    <a href="<?php echo URLROOT; ?>posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>
  </form>
<?php endif; ?>

<?php require APPROOT . '/views/includes/footer.php'; ?>
