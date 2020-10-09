<h2><?php echo $title; ?></h2>
<?php foreach ($papers as $paper_item): ?>
<h3><?php echo $paper_item['title']; ?></h3>
<div class="main"> <?php echo $paper_item['authors']; ?> </div>
<p>
<a href="<?php echo site_url('papers/'.$paper_item['year']); ?>">
View paper
</a>
</p>
<?php endforeach; ?>