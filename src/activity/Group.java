package activity;

public class Group {

	private static int idGroup = 0;
	private int headcount;
	
	public Group(int headcount) {
		Group.idGroup++;
		this.headcount = headcount;
	}
}
