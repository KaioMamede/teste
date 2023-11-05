package com.example.calc2kt

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.Toast
import com.example.calc2kt.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {
    private lateinit var binding: ActivityMainBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnP.setOnClickListener{
            Clicked(binding.btnP)
        }
        binding.btnM.setOnClickListener{
            Clicked(binding.btnM)
        }
        binding.btnMn.setOnClickListener{
            Clicked(binding.btnMn)
        }
        binding.btnD.setOnClickListener{
            Clicked(binding.btnD)
        }
    }
    public fun Clicked(buttonBinding: Button){
        if(buttonBinding == binding.btnM){
            var n1 = binding.editv1.text.toString().toDouble()
            var n2 = binding.editv2.text.toString().toDouble()
            Toast.makeText(this, (n1 * n2).toString(), Toast.LENGTH_SHORT).show()
        }
        if(buttonBinding == binding.btnP){
            var n1 = binding.editv1.text.toString().toDouble()
            var n2 = binding.editv2.text.toString().toDouble()
            Toast.makeText(this, (n1 + n2).toString(), Toast.LENGTH_SHORT).show()
        }
        if(buttonBinding == binding.btnMn){
            var n1 = binding.editv1.text.toString().toDouble()
            var n2 = binding.editv2.text.toString().toDouble()
            Toast.makeText(this, (n1 - n2).toString(), Toast.LENGTH_SHORT).show()
        }
        if(buttonBinding == binding.btnD){
            var n1 = binding.editv1.text.toString().toDouble()
            var n2 = binding.editv2.text.toString().toDouble()
            Toast.makeText(this, (n1 / n2).toString(), Toast.LENGTH_SHORT).show()
        }
    }
}