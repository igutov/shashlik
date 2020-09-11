<div class="salat common">
    <h1 id="salat">--- Салаты ---</h1>
    <div class="wrapper">
        <div class="food_container">
            <?php foreach ($ar as $key => $item) { ?>
            <?php if ($item['Раздел'] == 'Салаты') { ?>
            <div class="food_item_block" id="item_<?php
                    echo $item_id;
                    $item_id++;
                    ?>">
                <div class="food_item">
                    <div class="food_photo">
                        <img src="./goodsIMGs/<?php echo $item['Картинка']; ?>"
                            alt="image">
                    </div>
                    <div class="food_info">
                        <h3 class="food_name"><?php echo $item['Название']; ?></h3>
                        <p class="food_ingred"><?php echo $item['Состав']; ?></p>
                        <span class="food_weight"><?php echo $item['Вес']; ?>
                            грамм</span>
                        <?php if (is_string($item['Цена']) || is_null($item['Цена'])) { ?>
                        <span class="food_price"><?php echo $item['Цена']; ?></span>
                        <?php } ?>
                        <?php if (is_numeric($item['Цена'])) { ?>
                        <span class="food_price"><?php echo $item['Цена']; ?> руб.</span>
                        <?php } ?>
                        <button class="food_basket" id="<?php echo $key; ?>">В
                            корзину</button>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
