#include <stdio.h>      
#include <math.h>
#include <string>
#include <time.h>
#include <vector>
using namespace std;
class people{
private:
	double muturalFriend, totalFriend, overallRating, criteria1, criteria2, criteria3, ratingAmount,usednumratings = 0;
	int idNum,banlistSize = 0;
	string firstName, lastName;
	std::vector<int> bannedlist;

public:
	people(int tfi, vector<int> userList, int userBaseSize, string fni, string lni){
		int counter = 0;
		srand(time(NULL));
		firstName = fni;
		lastName = lni;
		totalFriend = tfi;
		overallRating = 0;
		criteria1 = 0;
		criteria2 = 0;
		criteria3 = 0;
		ratingAmount = 0;

		do {
			
			idNum = rand();

			for (int a = 0; a < userBaseSize; a++){
				if (idNum == userList[a]){
					counter--;
				}
			}
		} while (counter < userBaseSize);
	}
	double GetC1(){
		return criteria1;
	}
	double GetC2(){
		return criteria2;
	}
	double GetC3(){
		return criteria3;
	}
	double GetOr(){
		return overallRating;
	}
	double GetMf(){
		return muturalFriend;
	}
	double GetTf(){
		return totalFriend;
	}
	double GetRatenum(){
		return ratingAmount;
	}
	string Getfn(){
		return firstName;
	}
	string GetLn(){
		return lastName;
	}
	int GetID(){
		return idNum;
	}

	void setMf(double mfi){
		muturalFriend = mfi;
	}
	void banuser(int idi){

	}
	void decline(int idNumi){
		bannedlist.push_back(idNumi);
		banlistSize++;
	}
	double extrarating(double c1i, double c2i, double c3i, double ovr){

		criteria1 = (ratingAmount*criteria1 + c1i) / (ratingAmount + 1);
		criteria2 = (ratingAmount*criteria2 + c2i) / (ratingAmount + 1);
		criteria3 = (ratingAmount*criteria3 + c3i) / (ratingAmount + 1);
		overallRating = (ratingAmount*overallRating + ovr) / (ratingAmount + 1);
		ratingAmount++;
		if (ratingAmount > 7){
			usednumratings = 7;
		}
		else{
			usednumratings = ratingAmount;
		}
	}
	double returnRating(double mfi2, double c1i2, double c2i2, double c3i2){
		double rating = 0;
		rating = pow(overallRating, (8 - usednumratings))*((0.3*(mfi2 / totalFriend)) + (.4*pow((abs(criteria1 - c1i2)), (8 - usednumratings)))
			+(.2*pow((abs(criteria2 - c2i2)), (8 - usednumratings))));
		+(.1*pow((abs(criteria3 - c3i2)), (8 - usednumratings)));
	}
};