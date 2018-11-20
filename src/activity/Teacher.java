package activity;

public class Teacher {
	
	private static int idTeacher;
	private String nameTeacher;
	
	public Teacher(String name) {
		Teacher.idTeacher++;
		nameTeacher = name;
	}
}
