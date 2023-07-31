<?php

class SI_Widget_Social extends WP_Widget
{
  public function __construct()
  {
    parent::__construct('si_widget_social', 'SportIsland Widget Social', [
      'name' => 'SportIsland Widget Social',
      'description' => 'SportIsland Widget Social'
    ]);
  }

  public function form($instance)
  {
?>
    <p>
      <label for="<?php echo $this->get_field_id('id-tell'); ?>">
        Введите номер телефона
      </label>

      <input type="text" id="<?php echo $this->get_field_id('id-tell'); ?>" name="<?php echo $this->get_field_name('tell'); ?>" value="<?php echo $instance['tell']; ?>">

      <label for="<?php echo $this->get_field_id('id-adress'); ?>">
        Введите адрес
      </label>

      <input type="text" id="<?php echo $this->get_field_id('id-adress'); ?>" name="<?php echo $this->get_field_name('adress'); ?>" value="<?php echo $instance['adress']; ?>">
    </p>
  <?php
  }

  public function widget($args, $instance)
  {
  ?>

    <a target="_blank" href="#" class="widget-social-links fb">
      <span class="sr-only"> Мы в Facebook! </span>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
        <style>
          path {
            fill: #fff;
          }
        </style>
        <g>
          <path d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
		c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
		v20.341H37.29v27.585h23.814v70.761H89.584z" />
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
      </svg>
    </a>


    <address class="main-header__widget widget-contacts">
      <a href="tel:<?php echo $instance['tell']; ?>" class="widget-contacts__phone"> <?php echo $instance['tell']; ?> </a>
      <p class="widget-contacts__address"> <?php echo $instance['adress']; ?> </p>
    </address>

<?php
  }

  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}

?>