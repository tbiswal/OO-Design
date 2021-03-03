<?php

interface OnClickListener {

    function onClick();

    function onLongClick();

}

class Button implements OnClickListener {

    public function onClick() {

        // Overrides click and submit the form on save

    }


    public function onLongClick() {

    // On long click change the colour of the button

    }

}

class span implements OnClickListener {

    public function onClick() {

        // On click expand the span

    }


    // Forcefully implemented

    public function onLongClick() {

        return null;

    }
}

