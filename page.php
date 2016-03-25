<?php get_header(); ?>
      
			 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- Далее проверяется, находится ли текущая запись в рубрике 3. -->
 <!-- Если да, то блоку div, будет присвоен класс "post-cat-three". -->
 <!-- Иначе, блоку div будет присвоен класс "post". -->
 
<?php if ( in_category('3') ) { ?>
           <div class="post-cat-three">
 <?php } else { ?>
           <div class="post">
 <?php } ?>


 <!-- Отобразить Содержимое Записи внутри div. -->
 <div class="entry">
   <?php the_content(); ?>
 </div>


 <!-- Остановить Цикл (но есть ключевое слово "else:" - смотрите далее). -->
 <?php endwhile; else: ?>

 <!-- В первом "if" проверяется существуют ли каки-либо записи для  -->
 <!-- вывода.  Эта часть "else", говорит что делать, если записей не нашлось.-->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- ДЕЙСТВИТЕЛЬНО остановить Цикл -->
 <?php endif; ?>		

<?php get_footer(); ?>					