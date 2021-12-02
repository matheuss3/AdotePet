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

    /**
     * @return the dataHora
     */
    public Date getDataHora() {
        return dataHora;
    }

    /**
     * @param dataHora the dataHora to set
     */
    public void setDataHora(Date dataHora) {
        this.dataHora = dataHora;
    }

    /**
     * @return the descricao
     */
    public String getDescricao() {
        return descricao;
    }

    /**
     * @param descricao the descricao to set
     */
    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    /**
     * @return the situacao
     */
    public String getSituacao() {
        return situacao;
    }

    /**
     * @param situacao the situacao to set
     */
    public void setSituacao(String situacao) {
        this.situacao = situacao;
    }

    /**
     * @return the dataAlteracaoSituacao
     */
    public Date getDataAlteracaoSituacao() {
        return dataAlteracaoSituacao;
    }

    /**
     * @param dataAlteracaoSituacao the dataAlteracaoSituacao to set
     */
    public void setDataAlteracaoSituacao(Date dataAlteracaoSituacao) {
        this.dataAlteracaoSituacao = dataAlteracaoSituacao;
    }
    private Date dataHora;
    private String descricao;
    private String situacao;
    private Date dataAlteracaoSituacao;
}
