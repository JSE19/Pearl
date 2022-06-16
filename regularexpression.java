import java.util.regex.*;
import java.util.Scanner;
public class regularexpression {
	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		while (true) {
			System.out.println("Enter Regex Pattern: ");
			Pattern pattern = Pattern.compile(in.nextLine());
			System.out.println("Enter Text: ");
			Matcher matcher = pattern.matcher(in.nextLine());
			boolean found = false;
			while(matcher.find()){
				System.out.println("Text Found " + matcher.group() + " starting at index " + matcher.start() + " and ending at index " + matcher.end());
				found = true;
			}
			if (!found) {
				System.out.println("No match found");
			}
		}
	}
	
}