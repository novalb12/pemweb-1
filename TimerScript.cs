using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
public class TimerScript : MonoBehaviour
{
    Image timerBar;
    public float maxTime = 5f;
    float timeLeft;
    public GameObject kalah;
    public GameObject menang;
    public Enemy2 enemy2;

    // Start is called before the first frame update
    void Start()
    {
       //x   kalah = GameObject.FindWithTag ("Finish");
        kalah.SetActive(false);
        menang.SetActive(false);
        timerBar = GetComponent<Image>();
        timeLeft = maxTime; 
    }

    // Update is called once per frame
    void Update()
    {
        if(timeLeft > 0){
            if(enemy2.isSet==true){
                menang.SetActive(true);
                Time.timeScale = 0;
            }
            timeLeft -= Time.deltaTime;
            timerBar.fillAmount = 1-(timeLeft / maxTime);
        }
        else{
            kalah.SetActive(true);
            Time.timeScale = 0;
        }
    }
}
