package activity;

public class Student {

	private static int idStudent = 0;
	private String nameStudent;
	private String firstName;
	private int year;
	
	public Student(String name, String firstName, int year) {
		Student.idStudent++;
		this.nameStudent = name;
		this.firstName = firstName;
		this.year = year;
	}
}
