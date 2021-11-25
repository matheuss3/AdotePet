package AdotePet;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

public class JPAUtil{
    private static final EntityManagerFactory factory;
    static {
        factory = Persistence.createEntityManagerFactory("AdocaoAnimaisPU");
    }
    public static EntityManager getEntityManager() {
        return factory.createEntityManager();
    }

    static EntityManager getEntityManager() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
