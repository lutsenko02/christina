<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>CHRISTINA</title>
    <link rel="stylesheet" href="\wp-content\themes\CHRISTINA\style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <header class="wrapper">
        <div class="mainblock">
            <?php get_header() ?>

            <div class="mainblock__content">
                <div class="mainblock__text">
                    <div class="mainblock__title">Кристина – ваш проводник в мир красоты!</div>
                    <div class="mainblock__subtitle-delivery">Компания Кристина – это широкий ассортимент разнообразной продукции для красоты и долголетия. Мы идем в ногу со временем и поставляем материалы для салонов красоты, которые имеют доказанную эффективность и легкость в работе.</div>
                </div>
                <div class="mainblock__footer">
                    <a href="#title" class="mainblock__arrow"><img src="\wp-content\themes\CHRISTINA\img\arrow.svg" alt="стрелка"></a>
                </div>
            </div>

        </div>
    </header>
     <main class="wrapper">
        <div class="products">
            <div class="products__wrapper">
                <div class="content__title" id="title">Продукция</div>
                <div class="products__setting">
                    <div class="products__setting-left">
                        <div class="products__filter">
                            <div class="products__category-list category">
                                <a href="\wp-content\themes\CHRISTINA\"><img src="\wp-content\themes\CHRISTINA\img\filter.svg" alt="фильтр"></a>  
                                <div class="products__container-filter">
                                    <p>выбрать категорию</p>
                                    <img src="\wp-content\themes\CHRISTINA\img\arrow-min.svg" alt="">  
                                </div>
                            </div>
                            <div class="products__category-list-wp">
                                <div class="cats">
                            		<!-- выбираем категории товаров основные, у которых нет родителя -->
                            		<?php $categories = get_terms([
                            			'taxonomy' => 'product_cat',
                            			'parent' => 0
                            		]);?>  
                        		
                    		        <!-- если категории есть, перебираем массив с ними и кладём в список-->
                            		<?php if($categories) : ?>
                            			<ul>
                            				<?php foreach($categories as $category) : ?>
                            					<li class="category"> 
                            						<a href="<?=get_term_link($category->term_id)?>">
                            							<?=$category->name;?><span>(<?=$category->count; ?>)</span>
                            						</a>
                            						<!-- cоздаем массив категорий-детей текущей категории -->
                            						<?php 
                            							$subcategories = get_terms([
                            								'taxonomy' => 'product_cat',
                            								'hide_empty' => false,
                            								'parent' => $category->term_id
                            						]); ?>
                            						<?php if($subcategories):?>
                            							<ul>
                            								<?php foreach ($subcategories as $subcategory) : ?>
                            									<li><a href="<?=get_term_link($subcategory)?>";><?=$subcategory->name?><span>(<?=$subcategory->count?>)</span></a></li>
                            								<?php endforeach; ?>
                            							</ul>
                            						<?php endif;?>  
                            					</li>
                            				<?php endforeach; ?>
                            			</ul>
                            		<?php endif; ?> 
                                </div>   
                            </div>
                        </div>
                    	                 
                    </div>    
                    <div class="products__setting-right">
                        <a href="\wp-content\themes\CHRISTINA\" class="products__button">найти</a>
                        <form class="products__form">
                            <input type="text" id="name" placeholder="введите название" class="products__form-search">
                        </form>
                    </div>
                </div>
    
    
    <div class="products__list">
    	<?php
    	
    		$cat_id = get_queried_object()->term_id;
    		
    		//если мы на странице категории, то ищем товары категории, иначе - все
    		if ($cat_id) {
				$products = new WP_Query([
				    'post_type'      => 'product',
				    'post_status'    => 'publish',
				    'tax_query'     => [
				        [
				            'taxonomy'  => 'product_cat',
				            'field'     => 'id',          // тип поля (slug или id)
				            'terms'     => get_queried_object()->term_id // id текущей категории
				        ]
				    ]
				]);
    		} else {
    			$products = new WP_Query([
				    'post_type'      => 'product',
				    'post_status'    => 'publish'
				]);
    		}
			
			if ($products->have_posts()) {
			    while ($products->have_posts()) {
			        $products->the_post();
			        get_template_part('product-card'); // Шаблон для отображения карточки товара лежит в файле product-card.php
			    }
			} else {
			    echo ('<p>Извините, нет товаров.</p>');
			}
			wp_reset_postdata();
        ?>
    </div>
            </div>
        </div>
    </main> 
    <?php get_footer(); ?>
</body>
</html>