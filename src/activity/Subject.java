package activity;

import org.chocosolver.solver.Model;
import org.chocosolver.solver.variables.IntVar;

public class Subject{
	
	private IntVar hour;
	private int duration;
	
	public Subject(String name, Model model, int time) {
		this.hour = model.intVar(name, 0, 6000 - time);
		this.duration = time;
	}
	
	public IntVar getHour() {
		return this.hour;
	}
	
	public int getDuration() {
		return this.duration;
	}
}