<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class myMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $order = [];
    public $option;
    public function __construct($order, $option)
    {
        $this->order = $order;
        $this->option = $option;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // 1 - gui token ve mail khi dang ki
        if($this->option == 1) {
            return $this->subject('Xác nhận đăng kí tài khoản Toulons Compte')
                        ->view('mail.confirm_register');
        }

        // 2 - gui token dat lai mat khau
        if($this->option == 2) {
            return $this->subject('Yêu cầu đặt lại mật khẩu')
                        ->view('mail.reset_password');
        }

        // 3 - gui mail xac nhan gui don hang thanh cong
        if($this->option == 3) {
            return $this->subject('Chúng tôi đã nhận được yêu cầu')
                        ->view('mail.send_bill_success');
        }

        // 4 - gui mail xac nhan dat hang thanh cong
        if($this->option == 4) {
            return $this->subject('Đặt hàng thành công')
                        ->view('mail.order_success');
        }
    }
}
