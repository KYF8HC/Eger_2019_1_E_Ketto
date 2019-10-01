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
        }

        double Szam, Megoldas;
        int MuvSz;

        private void btnON_Click(object sender, EventArgs e)
        {
            tbDisplay.Enabled = true;
        }

        private void btnOFF_Click(object sender, EventArgs e)
        {
            tbDisplay.Clear();
            tbDisplay.Enabled = false;
        }

        private void btn12_Click(object sender, EventArgs e)
        {
            if(tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 1;
        }

        private void btn13_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 2;
        }

        private void btn14_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 3;
        }

        private void btn8_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 4;
        }

        private void btn9_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 5;
        }

        private void btn10_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 6;
        }

        private void btn4_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 7;
        }

        private void btn5_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 8;
        }

        private void btn6_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + 9;
        }

        private void btn3_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            {
                Szam = double.Parse(tbDisplay.Text);
                tbDisplay.Clear();
                tbDisplay.Focus();
                MuvSz = 1;
                lblSzam.Text = Szam.ToString() + "+";
            }
        }

        private void btn7_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            {
                Szam = double.Parse(tbDisplay.Text);
                tbDisplay.Clear();
                tbDisplay.Focus();
                MuvSz = 2;
                lblSzam.Text = Szam.ToString() + "-";
            }
        }

        private void btn11_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            {
                Szam = double.Parse(tbDisplay.Text);
                tbDisplay.Clear();
                tbDisplay.Focus();
                MuvSz = 3;
                lblSzam.Text = Szam.ToString() + "*";
            }
        }

        private void btn15_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            {
                Szam = double.Parse(tbDisplay.Text);
                tbDisplay.Clear();
                tbDisplay.Focus();
                MuvSz = 4;
                lblSzam.Text = Szam.ToString() + "/";
            }
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
            if (tbDisplay.Enabled == true)
            {
                Szam = double.Parse(tbDisplay.Text);
                Megoldas = Math.Sqrt(Szam);
                tbDisplay.Text = Megoldas.ToString();
            }
        }

        private void btnPow_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            {
                Szam = double.Parse(tbDisplay.Text);
                Megoldas = Math.Pow(Szam, 2);
                tbDisplay.Text = Megoldas.ToString();
            }
        }

        private void btnSin_Click(object sender, EventArgs e)
        {
            //if (double.Parse(tbDisplay.Text) <= 90)
            //{
            //    Szam = Math.PI * double.Parse(tbDisplay.Text) / 180;
            //}
            ////else if (double.Parse(tbDisplay.Text) <= 180)
            ////{
            ////    Szam = Math.PI * (double.Parse(tbDisplay.Text) - 90) / 180;

            ////}
            //else if (double.Parse(tbDisplay.Text) <= 270)
            //{
            //    Szam = Math.PI * (double.Parse(tbDisplay.Text) - 180) / 180;
            //    Szam = Szam * -1;
            //}
            //Megoldas = Math.Sin(Szam);
            //tbDisplay.Text = Megoldas.ToString();
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(System.Math.Sin((Convert.ToDouble(System.Math.PI) / 180) * (Convert.ToDouble(tbDisplay.Text))));

        }

        private void BtnCos_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(System.Math.Cos((Convert.ToDouble(System.Math.PI) / 180) * (Convert.ToDouble(tbDisplay.Text))));
        }

        private void BtnPi_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = tbDisplay.Text + Math.PI;  
        }
        
        private void Button2_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = "(";
        }

        private void Button3_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = ")";
        }

        
        private void BtnDev_Click(object sender, EventArgs e)
        {
        }

        private void BtnLog_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(System.Math.Log10(Convert.ToDouble(tbDisplay.Text)));
        }

        private void Log10_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(System.Math.Log(Convert.ToDouble(tbDisplay.Text)));
        }

        private void BtnPlusMinus_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(-Convert.ToInt32(tbDisplay.Text));
        }

        private void BtnX3_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(Convert.ToInt32(tbDisplay.Text) * Convert.ToInt32(tbDisplay.Text) * Convert.ToInt32(tbDisplay.Text));
        }

        private void Btn1x_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(Convert.ToDouble(1.0 / Convert.ToDouble(tbDisplay.Text)));
        }

        private void BtnFact_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            {
                int x1 = 1;
                for (int i = 1; i <= Convert.ToInt16(tbDisplay.Text); i++)
                {
                    x1 = x1 * i;
                }
                tbDisplay.Text = Convert.ToString(x1);
            }
        }

        private void BtnTan_Click(object sender, EventArgs e)
        {
            if (tbDisplay.Enabled == true)
            tbDisplay.Text = Convert.ToString(System.Math.Tan((Convert.ToDouble(System.Math.PI) / 180) * (Convert.ToDouble(tbDisplay.Text))));
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
