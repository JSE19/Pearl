import java.util.regex.*;
public class regularexp {
	public static void main(String[] args) {
		System.out.println(Pattern.matches("[amn]", "abcd"));
		System.out.println(Pattern.matches("[amn]", "a"));
		System.out.println(Pattern.matches("[amn]", "ammmna"));
		System.out.println(Pattern.matches("[a-zA-Z0-9]{6}", "arun32"));
	}
}
^(.+)@(.+)$
^[A-Za-z0-9+_.-].+@(.+)$