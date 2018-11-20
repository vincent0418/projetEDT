import java.util.ArrayList;
import org.chocosolver.solver.Model;
import org.chocosolver.solver.Solution;
import org.chocosolver.solver.Solver;
import activity.Subject;

public class Main {

	public static void main(String[] args) {
		Model model = new Model("EDT");
		
		// initialisation des cours
		Subject anglais = new Subject("Anglais", model, 200);
		Subject gestion = new Subject("Gestion", model, 200);
		Subject maths = new Subject("Maths", model, 150);
		Subject conception = new Subject("Conception", model, 250);
		Subject baseDonnees = new Subject("Base de données", model, 300);
		Subject maths2 = new Subject("Maths", model, 150);
		Subject gestion2 = new Subject("Gestion", model, 300);
		Subject ppp = new Subject("PPP", model, 150);
		Subject communication = new Subject("Communication", model, 150);
		Subject amphiBD = new Subject("Base de donées", model, 100);
		Subject amphiSysteme = new Subject("Systeme", model, 100);
		Subject modelisation = new Subject("Modelisation", model, 200);
		Subject systeme = new Subject("Systeme", model, 200);
		Subject conception2 = new Subject("Conception", model, 250);
		Subject algo = new Subject("Algo", model, 200);
		Subject projet = new Subject("Algo", model, 100);
		Subject amphiAlgo = new Subject("Algo", model, 100);
		Subject amphiConception = new Subject("Conception", model, 100);
		Subject algo2 = new Subject("Algo", model, 200);
		Subject web = new Subject("Web", model, 300);
		
		ArrayList<Subject> list = new ArrayList<Subject>();
		
		// ajout des cours a la liste
		list.add(anglais);
		list.add(gestion);
		list.add(maths);
		list.add(conception);
		list.add(baseDonnees);
		list.add(maths2);
		list.add(gestion2);
		list.add(ppp);
		list.add(communication);
		list.add(amphiBD);
		list.add(amphiSysteme);
		list.add(modelisation);
		list.add(systeme);
		list.add(conception2);
		list.add(algo);
		list.add(projet);
		list.add(amphiAlgo);
		list.add(amphiConception);
		list.add(algo2);
		list.add(web);
		
		// jour de la semaine
		ArrayList<Subject> lundi = new ArrayList<Subject>();
		ArrayList<Subject> mardi = new ArrayList<Subject>();
		ArrayList<Subject> mercredi = new ArrayList<Subject>();
		ArrayList<Subject> jeudi = new ArrayList<Subject>();
		ArrayList<Subject> vendredi = new ArrayList<Subject>();
		ArrayList<Subject> samedi = new ArrayList<Subject>();

		int day = 0;
		
		// definition des contraintes
		for (int i = 0; i < list.size(); i++) {
			for (int k = 0; k < 6; k++) {
				model.notMember(list.get(i).getIntvar(), day + 450 - list.get(i).getDuration(), day + 599).post();	// pause dejeuner
				model.notMember(list.get(i).getIntvar(), day - list.get(i).getDuration(), day - 1).post();			// evite qu'un cours ai lieu sur 2 jours
				day+=1000;	// ajout de 1 journée
			}
			day = 0;
			for (int j = i + 1; j < list.size(); j++) {
				int n = Math.max(list.get(i).getDuration(), list.get(j).getDuration()) + 24;	
				model.distance(list.get(i).getIntvar(), list.get(j).getIntvar(), ">", n).post();	// deux cours ne peuvent avoir lieu en meme temps
			}
		}
		
		// resolution 
		Solver solver = model.getSolver();
		//solver.showStatistics();
		Solution solution = solver.findSolution();
		
		if (solution != null) {
			// affecte le cours à sa journée
			for (Subject s : list) {
				if (s.getIntvar().getValue() < 1000)
					lundi.add(s);
				else if (s.getIntvar().getValue() < 2000)
					mardi.add(s);
				else if (s.getIntvar().getValue() < 3000)
					mercredi.add(s);
				else if (s.getIntvar().getValue() < 4000)
					jeudi.add(s);
				else if (s.getIntvar().getValue() < 5000)
					vendredi.add(s);
				else
					samedi.add(s);
			}
			
			// affichage
			System.out.println("Lundi");
			for (Subject s : lundi)
				System.out.println(s.toString());
			
			System.out.println("\nMardi");
			for (Subject s : mardi)
				System.out.println(s.toString());
			
			System.out.println("\nMercredi");
			for (Subject s : mercredi)
				System.out.println(s.toString());
			
			System.out.println("\nJeudi");
			for (Subject s : jeudi)
				System.out.println(s.toString());
			
			System.out.println("\nVendredi");
			for (Subject s : vendredi)
				System.out.println(s.toString());
			
			System.out.println("\nSamedi");
			for (Subject s : samedi)
				System.out.println(s.toString());
		}
		else
			System.out.println("Aucune solution trouve");
	}

}
