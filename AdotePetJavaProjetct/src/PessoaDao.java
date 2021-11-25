package AdotePet;

import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.EntityTransaction;
import javax.persistence.TypedQuery;


public class PessoaDao{
    public Pessoa salvar(Pessoa pessoa) {
	EntityManager em=JPAUtil.getEntityManager();
	EntityTransaction trx = em.getTransaction();
        trx.begin();
	pessoa = em.merge(pessoa);
	trx.commit();
	em.close();
        return pessoa;
    }

    public List<Pessoa> buscarTodos() {
	EntityManager em = JPAUtil.getEntityManager();
	TypedQuery<Pessoa> query = em.createQuery("from Pessoa", Pessoa.class);
        try {
            return query.getResultList();
        } finally {
            em.close();
        }
    }
    
    public Pessoa buscarPorId(Long id) {
	EntityManager em = JPAUtil.getEntityManager();
        try {
            return em.find(Pessoa.class, id);
        } finally {
            em.close();
	}
    }
    
    public Pessoa pessoaEmail(String email) {
	EntityManager em = JPAUtil.getEntityManager();
	TypedQuery<Pessoa> query = em.createQuery("from Pessoa p where p.email = :email", Pessoa.class);
	query.setParameter("email", email);
        try {
            return query.getSingleResult();
        } catch (Exception e) {
            return null;
        } finally {
            em.close();
        }
    }
    
    public Pessoa pessoaUsuario(Long id) {
	EntityManager em = JPAUtil.getEntityManager();
	TypedQuery<Pessoa> query = em.createQuery("from Pessoa p where p.usuario.id = :id", Pessoa.class);
	query.setParameter("id", id);
        try {
            return query.getSingleResult();
        } catch (Exception e) {
            return null;
        } finally {
            em.close();
        }
    }
}