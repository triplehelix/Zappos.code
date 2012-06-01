//Ninja book sorting program
//By: Michael Hedden
//For: Summer 2012 Zappos.code() application

#include <cstdlib>
#include <iostream>
#include <fstream>
#include <cstdio>
#include <string>

using namespace std;

//function prototypes
void deepcopy(string* newarr, string* oldarr, int size);
void sortarray(string* arr, int size);
string createoutput(string* arr, int size);
void swap(string* arr, int a, int b);

int main(int argc, char *argv[])
{
    //intro
    cout << "Ninja Book sorting program\nNinja books stored in ninjabooks.txt\nby: Michael Hedden\n\n";
    
    int cnt = 0;
    //array of strings
    const int MAXITEMS = 256;
    const string filename = "ninjabooks.txt";
    string temp[MAXITEMS];
    //output string
    string str_output;
    //read file and store in array
    ifstream filestr;
    filestr.open("ninjabooks.txt", ifstream::in);
    string readbook;
    //getline(filestr, readbook);
    //temp[cnt] = readbook;
    do {
       
       getline(filestr, readbook);
       temp[cnt] = readbook;
       cnt++;
    } while(!filestr.eof());
    filestr.close();
    string books[cnt];
    deepcopy(&books[0], &temp[0], cnt);
    delete [] temp;
    //sort array alphabetically
    sortarray(&books[0], cnt);
    
    /*debug
    for(int i=0; i<cnt; i++){
            cout << books[i] << "\n";
            }
             system("PAUSE");*/
    //create output string
    str_output = createoutput(&books[0], cnt);
    //output in unique downward display;
    cout << str_output;
    
    //exit
    system("PAUSE");
    return 0;
}


//functions

//deep copy all strings from old to new
void deepcopy(string* newarr, string* oldarr, int size){   
     for(int i = 0; i < size; i++){
             newarr[i] = oldarr[i];
             }
     }
     
//sort the contents of the array alphabetically     
void sortarray(string* arr, int size){
     int spos = 0;
     for(int i = 0; i < size; i++){
             string small = "ZZZZZZ";
             string str_tmp = arr[i];
             for(int j = i; j < size; j++){
             if(strcmp(arr[j].c_str(), small.c_str()) < 0){
                small = arr[j];
                spos = j;               
                }        
             }
             swap(&arr[0], i, spos);        
     }
     }
//create the string that outputs in bookshelf form     
string createoutput( string* arr, int size){
     //init string
     string outstr = "";
     //find longest length
     int biggest = 0;
     for(int k=0; k<size; k++){
             if(arr[k].size() > biggest){
                              biggest = arr[k].size();
                              }
             }
     //for loop of height
     for(int i=0; i<biggest; i++){
             //for loop for number of books
             for(int j=0; j<size; j++){
                     if(arr[j].size() < i+1){
                           outstr += "   ";              
                        }else{
                           outstr += arr[j][i];
                           outstr += "  ";
                        }
                     }
                     outstr += "\n";
             }
     return outstr;
     }
     
void swap(string* arr, int a, int b){
     string str_tmp;
     str_tmp = arr[a];
     arr[a] = arr[b];
     arr[b] = str_tmp;
     }
