using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculator
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            tbDisplay.Enabled = false;
            btnON.Show();
            btnOFF.Hide();
            btn1.Enabled = false;
            btn2.Enabled = false;
            btn3.Enabled = false;
            btn4.Enabled = false;
            btn5.Enabled = false;
            btn6.Enabled = false;
            btn7.Enabled = false;
            btn8.Enabled = false;
            btn9.Enabled = false;
            btn10.Enabled = false;
            btn11.Enabled = false;
            btn12.Enabled = false;
            btn13.Enabled = false;
            btn14.Enabled = false;
            btn15.Enabled = false;
            btn15.Enabled = false;
            btn16.Enabled = false;
            btn17.Enabled = false;
            btn18.Enabled = false;
            btnSqrt.Enabled = false;
            btnPow.Enabled = false;
            btnSin.Enabled = false;
            btnCos.Enabled = false;
            btnTan.Enabled = false;
            btnPi.Enabled = false;
            btnPlusMinus.Enabled = false;
            button2.Enabled = false;
            button3.Enabled = false;
            btnDev.Enabled = false;
            btnLog.Enabled = false;
            Log10.Enabled = false;
        }

        double Szam, Megoldas;
        int MuvSz;

        private void btnON_Click(object sender, EventArgs e)
        {
            tbDisplay.Enabled = true;
            btnON.Hide();
            btnOFF.Show();
            btn1.Enabled = true;
            btn2.Enabled = true;
            btn3.Enabled = true;
            btn4.Enabled = true;
            btn5.Enabled = true;
            btn6.Enabled = true;
            btn7.Enabled = true;
            btn8.Enabled = true;
            btn9.Enabled = true;
            btn10.Enabled = true;
            btn11.Enabled = true;
            btn12.Enabled = true;
            btn13.Enabled = true;
            btn14.Enabled = true;
            btn15.Enabled = true;
            btn15.Enabled = true;
            btn16.Enabled = true;
            btn17.Enabled = true;
            btn18.Enabled = true;
            btnSqrt.Enabled = true;
            btnPow.Enabled = true;
            btnSin.Enabled = true;
            btnCos.Enabled = true;
            btnTan.Enabled = true;
            btnPi.Enabled = true;
            btnPlusMinus.Enabled = true;
            button2.Enabled = true;
            button3.Enabled = true;
            btnDev.Enabled = true;
            btnLog.Enabled = true;
            Log10.Enabled = true;
        }

        private void btnOFF_Click(object sender, EventArgs e)
        {
            tbDisplay.Clear();
            tbDisplay.Enabled = false;
            btnON.Show();
            btnOFF.Hide();
            btn1.Enabled = false;
            btn2.Enabled = false;
            btn3.Enabled = false;
            btn4.Enabled = false;
            btn5.Enabled = false;
            btn6.Enabled = false;
            btn7.Enabled = false;
            btn8.Enabled = false;
            btn9.Enabled = false;
            btn10.Enabled = false;
            btn11.Enabled = false;
            btn12.Enabled = false;
            btn13.Enabled = false;
            btn14.Enabled = false;
            btn15.Enabled = false;
            btn15.Enabled = false;
            btn16.Enabled = false;
            btn17.Enabled = false;
            btn18.Enabled = false;
            btnSqrt.Enabled = false;
            btnPow.Enabled = false;
            btnSin.Enabled = false;
            btnCos.Enabled = false;
            btnTan.Enabled = false;
            btnPi.Enabled = false;
            btnPlusMinus.Enabled = false;
            button2.Enabled = false;
            button3.Enabled = false;
            btnDev.Enabled = false;
            btnLog.Enabled = false;
            Log10.Enabled = false;

        }

        private void btn12_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 1;
        }

        private void btn13_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 2;
        }

        private void btn14_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 3;
        }

        private void btn8_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 4;
        }

        private void btn9_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 5;
        }

        private void btn10_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 6;
        }

        private void btn4_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 7;
        }

        private void btn5_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 8;
        }

        private void btn6_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 9;
        }

        private void btn3_Click(object sender, EventArgs e)
        {
            Szam = double.Parse(tbDisplay.Text);
            tbDisplay.Clear();
            tbDisplay.Focus();
            MuvSz = 1;
            lblSzam.Text = Szam.ToString() + "+";
        }

        private void btn7_Click(object sender, EventArgs e)
        {
            Szam = double.Parse(tbDisplay.Text);
            tbDisplay.Clear();
            tbDisplay.Focus();
            MuvSz = 2;
            lblSzam.Text = Szam.ToString() + "-";
        }

        private void btn11_Click(object sender, EventArgs e)
        {
            Szam = double.Parse(tbDisplay.Text);
            tbDisplay.Clear();
            tbDisplay.Focus();
            MuvSz = 3;
            lblSzam.Text = Szam.ToString() + "*";
        }

        private void btn15_Click(object sender, EventArgs e)
        {
            Szam = double.Parse(tbDisplay.Text);
            tbDisplay.Clear();
            tbDisplay.Focus();
            MuvSz = 4;
            lblSzam.Text = Szam.ToString() + "/";
        }

        private void btn18_Click(object sender, EventArgs e)
        {
            Muveletek();
            lblSzam.Text = "";
        }

        private void btn2_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = "";
        }

        private void btn17_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + 0;
        }

        private void btn1_Click(object sender, EventArgs e)
        {
            int hossz = tbDisplay.Text.Length - 1;
            string szoveg = tbDisplay.Text;
            tbDisplay.Clear();
            for (int i = 0; i < hossz; i++)
            {
                tbDisplay.Text = tbDisplay.Text + szoveg[i];
            }
        }

        private void btnSqrt_Click(object sender, EventArgs e)
        {
            Szam = double.Parse(tbDisplay.Text);
            Megoldas = Math.Sqrt(Szam);
            tbDisplay.Text = Megoldas.ToString();
        }

        private void btnPow_Click(object sender, EventArgs e)
        {
            Szam = double.Parse(tbDisplay.Text);
            Megoldas = Math.Pow(Szam, 2);
            tbDisplay.Text = Megoldas.ToString();
        }

        private void btnSin_Click(object sender, EventArgs e)
        {
            if (double.Parse(tbDisplay.Text) <= 90)
            {
                Szam = Math.PI * double.Parse(tbDisplay.Text) / 180;
            }
            //else if (double.Parse(tbDisplay.Text) <= 180)
            //{
            //    Szam = Math.PI * (double.Parse(tbDisplay.Text) - 90) / 180;

            //}
            else if (double.Parse(tbDisplay.Text) <= 270)
            {
                Szam = Math.PI * (double.Parse(tbDisplay.Text) - 180) / 180;
                Szam = Szam * -1;
            }
            Megoldas = Math.Sin(Szam);
            tbDisplay.Text = Megoldas.ToString();

        }

        private void BtnCos_Click(object sender, EventArgs e)
        {
            //if(double.Parse(tbDisplay.Text) <= 90 )
            //{
            //    Szam = 
            //}
        }

        private void BtnPi_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = tbDisplay.Text + Math.PI;  
        }
        
        private void Button2_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = "(";
        }

        private void Button3_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = ")";
        }

        
        private void BtnDev_Click(object sender, EventArgs e)
        {
        }

        private void BtnLog_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = Convert.ToString(System.Math.Log10(Convert.ToDouble(tbDisplay.Text)));
        }

        private void Log10_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = Convert.ToString(System.Math.Log(Convert.ToDouble(tbDisplay.Text)));
        }

        private void BtnPlusMinus_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = Convert.ToString(-Convert.ToInt32(tbDisplay.Text));
        }

        private void BtnX3_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = Convert.ToString(Convert.ToInt32(tbDisplay.Text) * Convert.ToInt32(tbDisplay.Text) * Convert.ToInt32(tbDisplay.Text));
        }

        private void Btn1x_Click(object sender, EventArgs e)
        {
            tbDisplay.Text = Convert.ToString(Convert.ToDouble(1.0 / Convert.ToDouble(tbDisplay.Text)));
        }

        private void Muveletek()
        {
            switch (MuvSz)
            {
                case 1:
                    Megoldas = Szam + double.Parse(tbDisplay.Text);
                    tbDisplay.Text = Megoldas.ToString();
                    break;
                case 2:
                    Megoldas = Szam - double.Parse(tbDisplay.Text);
                    tbDisplay.Text = Megoldas.ToString();
                    break;
                case 3:
                    Megoldas = Szam * double.Parse(tbDisplay.Text);
                    tbDisplay.Text = Megoldas.ToString();
                    break;
                case 4:
                    Megoldas = Szam / double.Parse(tbDisplay.Text);
                    tbDisplay.Text = Megoldas.ToString();
                    break;
                //case 5:
                //    Megoldas = Math.Sqrt(Szam);
                //    tbDisplay.Text = Megoldas.ToString();
                //    break;
                default:
                    break;
            }
        }


    }
}
