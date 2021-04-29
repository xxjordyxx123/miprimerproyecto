<?php

class mi_widget_class extends WP_Widget {

    public function __construct() {
        //$this->WP_Widget($id_base, $name, $widget_options);
        parent::__construct('css_id'  , 'mi primer widget', array("classname" => "clase-del-widget", "description" => "Descripción del widget"));
    }

    // Creamos el cuerpo del widget
    public function form($instance){
        $defaults=array("titulo"=>"");
        // A la variable instance le agregamos el array $defaults el cual contiene el titulo
        $instance=wp_parse_args((array)$instance,$defaults);
        $titulo=esc_attr($instance["titulo"]);
        ?>
        <!--Dibujamos el cuerpo del widget-->
        <p>Título : <input type="text" name="<?php echo $this->get_field_name("titulo");?>" value="<?php echo $titulo;?>" class="widefat" style="color:#FF0000" /></p>
        <?php        
    }
    
    // Guardamos lo cambios
    public function update($new_instance,$old_instance){
        // Inicializamos la instancia con el valor anterior
        $instance=$old_instance;
        // Actualizamos la instancia con el nuevo valor
        $instance["titulo"]=strip_tags($new_instance["titulo"]);
        // Retornamos la instancia con el nuevo valor
        return $instance;
    }
    
    //Mostramos nuestro widget en el fronten
    public function widget($args,$instance){
        //Extraemos los argumentos before_widget,after_widget,before_title,after_title
        extract($args);
        // Extraemos el valor previamente gurdado en titulo
        $titulo=apply_filters('widget_title',$instance['titulo']);
        
        // Dibujamos como queremos que se muestre el widget
        echo $before_widget;
        echo $before_title.$titulo.$after_title;
        echo $after_widget;        
    }
       
}
