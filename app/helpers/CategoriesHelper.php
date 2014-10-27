<?php

class CategoriesHelper {
    public static function selectOptions($categories) {
        $options = array();
        foreach ($categories as $category) {
            $options[$category->id] = $category->name;
        }
        return $options;
    }
}