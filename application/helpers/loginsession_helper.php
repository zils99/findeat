<?php
function loginsession()
{
    $ci = get_instance();
    if (!$ci->session->userdata('user_email')) {
        redirect('landing/login');
    }
}
