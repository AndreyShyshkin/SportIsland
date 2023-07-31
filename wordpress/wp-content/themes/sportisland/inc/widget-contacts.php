<?php

class SI_Widget_Contacts extends WP_Widget{
    public function __construct(){
        parent::__construct('si_widget_contacts', 'SportIsland Widget Contacts', [
            'name' => 'SportIsland Widget Contacts',
            'description' => 'SportIsland Widget Contacts'
        ]);
    }

    public function form($instance){
    ?>
    <p>
        <label for="<?php echo $this->get_field_id('id-tell'); ?>">
             Введите номер телефона
        </label>

        <input 
            type="text"    
            id="<?php echo $this->get_field_id('id-tell'); ?>" 
            name="<?php echo $this->get_field_name('tell'); ?>" 
            value="<?php echo $instance['tell']; ?>"
        >

        <label for="<?php echo $this->get_field_id('id-adress'); ?>">
             Введите адрес
        </label>

        <input 
            type="text"    
            id="<?php echo $this->get_field_id('id-adress'); ?>" 
            name="<?php echo $this->get_field_name('adress'); ?>" 
            value="<?php echo $instance['adress']; ?>"
        >
    </p>
    <?php    
    }

    public function widget( $args, $instance ){
        ?>
        
        <address class="main-header__widget widget-contacts">
          <a href="tel:<?php echo $instance['tell']; ?>" class="widget-contacts__phone"> <?php echo $instance['tell']; ?> </a>
          <p class="widget-contacts__address"> <?php echo $instance['adress']; ?> </p>
        </address>
        
        <?php
    }

    public function update($new_instance, $old_instance){
        return $new_instance;
    }
}

?>