import java.util.ArrayList;
import org.chocosolver.solver.Model;
import org.chocosolver.solver.Solution;
import org.chocosolver.solver.Solver;

import activity.Subject;

public class Main {

	public static void main(String[] args) {
		Model model = new Model("EDT");
		
		Subject algo = new Subject("Algo", model, 200);
		Subject maths = new Subject("Maths", model, 150);
		Subject anglais = new Subject("Anglais", model, 200);
		Subject conception = new Subject("Conception", model, 30);
		Subject gestion = new Subject("Gestion", model, 300);
		Subject baseDonnees = new Subject("Base de données", model, 300);
		Subject communication = new Subject("Communication", model, 150);
		Subject systeme = new Subject("Systeme", model, 200);
		
		ArrayList<Subject> list = new ArrayList<Subject>();
		
		list.add(algo);
		list.add(anglais);
		list.add(maths);
		list.add(conception);
		list.add(gestion);
		list.add(baseDonnees);
		list.add(communication);
		list.add(systeme);
		
		int day = 0;
		
		for (int i = 0; i < list.size(); i++) {
			for (int k = 0; k < 6; k++) {
				model.notMember(list.get(i).getHour(), day + 450 - list.get(i).getDuration(), day + 600).post();
				day+=1000;
			}
			for (int j = i + 1; j < list.size(); j++) {
				int n = Math.max(list.get(i).getDuration(), list.get(j).getDuration()) + 24;
				model.distance(list.get(i).getHour(), list.get(j).getHour(), ">", n).post(); 
			}
		}
		
		Solver solver = model.getSolver();
		Solution solution = solver.findSolution();
		if (solution != null)
		    System.out.println(solution.toString());
		else
			System.out.println("Aucune solution trouve");
	}

}
