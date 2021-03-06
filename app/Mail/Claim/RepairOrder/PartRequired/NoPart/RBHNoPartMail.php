<?php

namespace App\Mail\Claim\RepairOrder\PartRequired\NoPart;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RBHNoPartMail extends Mailable
{
    use Queueable, SerializesModels;

    private $claim;
    private $claimComments;
    private $claimMessage;
    private $claimPdf;
    private $claimType;

    /**
     * RBHNoPartMail constructor.
     *
     * @param $claim
     * @param $claimComments
     */
    public function __construct($claim, $claimComments, $claimPdf)
    {
        $this->claim = $claim;
        $this->claimComments = $claimComments;
        $this->claimMessage = 'Sorry, there is no part available for '
            . $this->claim[0]->cust_first_name . ' ' . $this->claim[0]->cust_last_name . '\'s bag.' .
            'Please review claim and authorize conversion to a Replace Order.';
        $this->claimPdf = $claimPdf;
        $this->claimType = 'No Part';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.claim.rbh')
            ->subject('Ricardo Beverly Hills - Part Order #' . $this->claim[0]->claim_id . ' No Part')
            ->with([
                'claim'         => $this->claim,
                'claimComments' => $this->claimComments,
                'claimMessage'  => $this->claimMessage,
                'claimType'     => $this->claimType,
            ])
            ->attachData($this->claimPdf, 'No Parts - Repair Order ' . $this->claim[0]->claim_id . '.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
