<?php

namespace App\Mail;

use App\Models\Solicitante;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SolicitacaoCadastro extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitante;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitante)
    {
        $this->solicitante = $solicitante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(env('MAIL_USERNAME'))
            ->subject("Solicitação de participação no Projeto Reviver")
            ->with([
                "nome_solicitante" => $this->solicitante["nome"],
                "email_solicitante" => $this->solicitante["email"],
                "celular_solicitante" => $this->solicitante["celular"],
                "doenca_solicitante" => $this->solicitante["doenca"],
                "sou_solicitante" => $this->solicitante["sou"]
            ])
            ->view('emails.solicitacao_cadastro');
    }
}
