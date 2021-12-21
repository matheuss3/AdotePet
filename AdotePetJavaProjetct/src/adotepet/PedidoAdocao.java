/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package adotepet;

import java.util.Date;

/**
 *
 * @author Matheus
 */
public class PedidoAdocao {
    public PedidoAdocao(Date dataHora, String descricao,
                        Adotante adotante) {
        this.dataHora = dataHora;
        this.descricao = descricao;
        this.situacao = "EM ABERTO";
        this.adotante = adotante;
    }

    private Date dataHora;
    private String descricao;
    private String situacao;
    private Adotante adotante;

    public Date getDataHora() {
        return dataHora;
    }

    public void setDataHora(Date dataHora) {
        this.dataHora = dataHora;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public String getSituacao() {
        return situacao;
    }

    public void setSituacao(String situacao) {
        this.situacao = situacao;
    }

    public Adotante getAdotante() {
        return adotante;
    }

    public void setAdotante(Adotante adotante) {
        this.adotante = adotante;
    }
}
