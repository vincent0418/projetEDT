package activity;

import org.chocosolver.solver.Model;
import org.chocosolver.solver.variables.IntVar;

public class Subject{
	
	private IntVar hour;
	private int duration;
	
	/*
	 *  Constructeur 
	 */
	public Subject(String name, Model model, int time) {
		this.hour = model.intVar(name, 0, 6000 - time);
		this.duration = time;
	}
	
	public IntVar getIntvar() {
		return this.hour;
	}
	
	public int getDuration() {
		return this.duration;
	}
	
	public String toString() {
		double hStart = ((double) hour.getValue() % 1000 + 800) / 100;
		double hEnd = ((double) hour.getValue() % 1000 + 800 + this.duration) / 100;
		return hour.getName() + ": " + hStart + "h - " + hEnd + "h";
	}
}