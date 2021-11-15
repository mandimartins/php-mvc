<?php
    require APPROOT . "/views/includes/header.php";
?>

<div class="row">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a href="<?php echo URLROOT; ?>posts/add" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="16" height="16"
             fill="currentColor"
             class="bi bi-pencil" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0
             .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1
              .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5
              3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761
              5.175-.106.106-1.528
              3.821 3.821-1.528.106-.106A.5.5 0 0 1 5
              12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
        </svg> Add Post
         </a>
    </div>
    <div class="row mb-3">
        <?php foreach ($data["posts"] as $post) : ?>
            <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4
      shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0"><?php echo $post->title; ?></h3>
          <div class="mb-1 text-muted"><?php echo $post->postCreated; ?></div>
          <div class="mb-1 text-muted">Written by: <strong class="text-dark"><?php echo $post->name; ?>
        </strong></div>
          <p class="mb-auto">This is a wider card with supporting text below as
              a natural lead-in to additional content.</p>
          <a href="<?php echo URLROOT; ?>posts/show" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img"
               width="200"
               height="250"
               xmlns="http://www.w3.org/2000/svg"
               role="img" aria-label="Placeholder: Thumbnail"
               preserveAspectRatio="xMidYMid slice"
               focusable="false">
               <title>Placeholder</title>
               <rect width="100%"
                     height="100%"
                     fill="#55595c">
               </rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
        <?php endforeach; ?>
    </div>
</div>


<?php
    require APPROOT . "/views/includes/footer.php";
?>
