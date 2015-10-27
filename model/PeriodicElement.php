<?php

/* 
 * @author Nick Lashinski
 */

namespace model;

class PeriodicElement {
    /**
     * Takes user input that has been checked and returns element information
     * @param type $input
     */
    public function lookup($input){
        switch ($input) {
            case 1:
                return "Name: Hydrogen, Symbol: H, Atomic Weight: 1.008, Category: Diatomic Nonmetal";
            case 2:
                return "Name: Helium, Symbol: He, Atomic Weight: 4.002602, Category: Noble Gas";
            case 3:
                return "Name: Lithium, Symbol: Li, Atomic Weight: 6.94, Category: Alkali Metal";
            case 4:
                return "Name: Beryllium, Symbol: Be, Atomic Weight: 9.0121831, Category: Alkaline Earth Metal";
            case 5:
                return "Name: Boron, Symbol: B, Atomic Weight: 10.81, Category: Metalloid";
            case 6:
                return "Name: Carbon, Symbol: C, Atomic Weight: 12.011, Category: Polyatomic Nonmetal";
            case 7:
                return "Name: Nitrogen, Symbol: N, Atomic Weight: 14.007, Category: Diatomic Nonmetal";
            case 8:
                return "Name: Oxygen, Symbol: O, Atomic Weight: 15.999, Category: Diatomic Nonmetal";
            case 9:
                return "Name: Fluorine, Symbol: F, Atomic Weight: 18.998403163, Category: Diatomic Nonmetal";
            case 10:
                return "Name: Neon, Symbol: Ne, Atomic Weight: 20.1797, Category: Nobel Gas";
            case 11:
                return "Name: Sodium, Symbol: Na, Atomic Weight: 22.98976928, Category: Alkali Metal";
            case 12:
                return "Name: Magnesium, Symbol: Mg, Atomic Weight: 24.305, Category: Alkaline Earth Metal";
            case 13:
                return "Name: Aluminium, Symbol: Al, Atomic Weight: 26.9815385, Category: Post-Transition Metal";
            case 14:
                return "Name: Silicon, Symbol: Si, Atomic Weight: 28.085, Category: Metalloid";
            case 15:
                return "Name: Phosphorus, Symbol: P, Atomic Weight: 30.973761998, Category: Polyatomic Nonmetal";
            case 16:
                return "Name: Sulfur, Symbol: S, Atomic Weight: 32.06, Category: Polyatomic Nonmetal";
            case 17:
                return "Name: Chlorine, Symbol: Cl, Atomic Weight: 35.45, Category: Diatomic Nonmetal";
            case 18:
                return "Name: Argon, Symbol: Ar, Atomic Weight: 39.948, Category: Noble Gas";
            case 19:
                return "Name: Potassium, Symbol: K, Atomic Weight: 39.0983, Category: Alkali Metal";
            case 20:
                return "Name: Calcium, Symbol: Ca, Atomic Weight: 40.078, Category: Alkaline Earth Metal";
            case 21:
                return "Name: Scandium, Symbol: Sc, Atomic Weight: 44.955908, Category: Transition Metal";
            case 22:
                return "Name: Titanium, Symbol: Ti, Atomic Weight: 47.867, Category: Transition Metal";
            case 23:
                return "Name: Vanadium, Symbol: V, Atomic Weight: 50.9415, Category: Transition Metal";
            case 24:
                return "Name: Chromium, Symbol: r, Atomic Weight: 51.9961, Category: Transition Metal";
            case 25:
                return "Name: Manganese, Symbol: Mn, Atomic Weight: 54.938044, Category: Transition Metal";
            case 26:
                return "Name: Iron, Symbol: Fe, Atomic Weight: 55.845, Category: Transition Metal";
            case 27:
                return "Name: Cobalt, Symbol: Co, Atomic Weight: 58.933194, Category: Transition Metal";
            case 28:
                return "Name: Nickel, Symbol: Ni, Atomic Weight: 58.6934, Category: Transition Metal";
            case 29:
                return "Name: Copper, Symbol: Cu, Atomic Weight: 63.546, Category: Transition Metal";
            case 30:
                return "Name: Zinc, Symbol: Zn, Atomic Weight: 65.38, Category: Transition Metal";
            case 31:
                return "Name: Gallium, Symbol: Ga, Atomic Weight: 69.723, Category: Post-Transition Metal";
            case 32:
                return "Name: Germanium, Symbol: Ge, Atomic Weight: 72.630, Category: Metalloid";
            case 33:
                return "Name: Arsenic, Symbol: As, Atomic Weight: 74.921595, Category: Metalloid";
            case 34:
                return "Name: Selenium, Symbol: Se, Atomic Weight: 78.971, Category: Polyatomic Nonmetal";
            case 35:
                return "Name: Bromine, Symbol: Br, Atomic Weight: 79.904, Category: Diatomic Nonmetal";
            case 36:
                return "Name: Krypton, Symbol: Kr, Atomic Weight: 83.798, Category: Noble Gas";
            case 37:
                return "Name: Rubidium, Symbol: Rb, Atomic Weight: 85.4678, Category: Alkali Metal";
            case 38:
                return "Name: Strontium, Symbol: Sr, Atomic Weight: 87.62, Category: Alkaline Earth Metal";
            case 39:
                return "Name: Yttrium, Symbol: Y, Atomic Weight: 88.90584, Category: Transition Metal";
            case 40:
                return "Name: Zirconium, Symbol: Zr, Atomic Weight: 91.224, Category: Transition Metal";
            case 41:
                return "Name: Niobium, Symbol: Nb, Atomic Weight: 92.90637, Category: Transition Metal";
            case 42:
                return "Name: Molybdenum, Symbol: Mo, Atomic Weight: 95.95, Category: Transition Metal";
            case 43:
                return "Name: Technetium, Symbol: Tc, Atomic Weight: 98, Category: Transition Metal";
            case 44:
                return "Name: Ruthenium, Symbol: Ru, Atomic Weight: 101.07, Category: Transition Metal";
            case 45:
                return "Name: Rhodium, Symbol: Rh, Atomic Weight: 102.90550, Category: Transition Metal";
            case 46:
                return "Name: Palladium, Symbol: Pd, Atomic Weight: 106.42, Category: Transition Metal";
            case 47:
                return "Name: Silver, Symbol: Ag, Atomic Weight: 107.8682, Category: Transition Metal";
            case 48:
                return "Name: Cadmium, Symbol: Cd, Atomic Weight: 112.414, Category: Transition Metal";
            case 49:
                return "Name: Indium, Symbol: In, Atomic Weight: 114.818, Category: Post-Transition Metal";
            case 50:
                return "Name: Tin, Symbol: Sn, Atomic Weight: 118.710, Category: Post-Transition Metal";
            case 51:
                return "Name: Antimony, Symbol: Sb, Atomic Weight: 121.760, Category: Metalloid";
            case 52:
                return "Name: Tellurium, Symbol: Te, Atomic Weight: 127.60, Category: Metalloid";
            case 53:
                return "Name: Iodine, Symbol: I, Atomic Weight: 126.90447, Category: Diatomic Nonmetal";
            case 54:
                return "Name: Xenon, Symbol: Xe, Atomic Weight: 131.293, Category: Noble Gas";
            case 55:
                return "Name: Caesium, Symbol: Cs, Atomic Weight: 132.90545196, Category: Alkali Metal";
            case 56:
                return "Name: Barium, Symbol: Ba, Atomic Weight: 137.327, Category: Alaline Earth Metal";
            case 57:
                return "Name: Lanthanum, Symbol: La, Atomic Weight: 138.90547, Category: Lanthanide";
            case 58:
                return "Name: Cerium, Symbol: Ce, Atomic Weight: 140.116, Category: Lanthanide";
            case 59:
                return "Name: Praseodymium, Symbol: Pr, Atomic Weight: 140.90766, Category: Lanthanide";
            case 60:
                return "Name: Neodymium, Symbol: Nd, Atomic Weight: 144.242, Category: Lanthanide";
            case 61:
                return "Name: Promethium, Symbol: Pm, Atomic Weight: 145, Category: Lanthanide";
            case 62:
                return "Name: Samarium, Symbol: Sm, Atomic Weight: 150.36, Category: Lanthanide";
            case 63:
                return "Name: Europium, Symbol: Eu, Atomic Weight: 151.964, Category: Lanthanide";
            case 64:
                return "Name: Gadolinium, Symbol: Gd, Atomic Weight: 157.25, Category: Lanthanide";
            case 65:
                return "Name: Terbium, Symbol: Tb, Atomic Weight: 158.92535, Category: Lanthanide";
            case 66:
                return "Name: Dysprosium, Symbol: Dy, Atomic Weight: 162.500, Category: Lanthanide";
            case 67:
                return "Name: Holmium, Symbol: Ho, Atomic Weight: 164.93033, Category: Lanthanide";
            case 68:
                return "Name: Erbium, Symbol: Er, Atomic Weight: 167.259, Category: Lanthanide";
            case 69:
                return "Name: Thulium, Symbol: Tm, Atomic Weight: 168.93422, Category: Lanthanide";
            case 70:
                return "Name: Ytterbium, Symbol: Yb, Atomic Weight: 173.045, Category: Lanthanide";
            case 71:
                return "Name: Lutetium, Symbol: Lu, Atomic Weight: 174.9668, Category: Lanthanide";
            case 72:
                return "Name: Hafnium, Symbol: Hf, Atomic Weight: 178.49, Category: Transition Metal";
            case 73:
                return "Name: Tantalum, Symbol: Ta, Atomic Weight: 180.94788, Category: Transition Metal";
            case 74:
                return "Name: Tungsten, Symbol: W, Atomic Weight: 183.84, Category: Transition Metal";
            case 75:
                return "Name: Rhenium, Symbol: Re, Atomic Weight: 186.207, Category: Transition Metal";
            case 76:
                return "Name: Osmium, Symbol: Os, Atomic Weight: 190.23, Category: Transition Metal";
            case 77:
                return "Name: Iridium, Symbol: Ir, Atomic Weight: 192.217, Category: Transition Metal";
            case 78:
                return "Name: Platinum, Symbol: Pt, Atomic Weight: 195.084, Category: Transition Metal";
            case 79:
                return "Name: Gold, Symbol: Au, Atomic Weight: 196.966569, Category: Transition Metal";
            case 80:
                return "Name: Mercury, Symbol: Hg, Atomic Weight: 200.592, Category: Transition Metal";
            case 81:
                return "Name: Thallium, Symbol: Ti, Atomic Weight: 204.38, Category: Post-Transition Metal";
            case 82:
                return "Name: Lead, Symbol: Pb, Atomic Weight: 207.2, Category: Post-Transition Metal";
            case 83:
                return "Name: Bismuth, Symbol: Bi, Atomic Weight: 208.98040, Category: Post-Transition Metal";
            case 84:
                return "Name: Polonium, Symbol: Po, Atomic Weight: 209, Category: Post-Transition Metal";
            case 85:
                return "Name: Astatine, Symbol: At, Atomic Weight: 210, Category: Metalloid";
            case 86:
                return "Name: Radon, Symbol: Rn, Atomic Weight: 222, Category: Noble Gas";
            case 87:
                return "Name: Francium, Symbol: Fr, Atomic Weight: 223, Category: Alkali Metal";
            case 88:
                return "Name: Radium, Symbol: Ra, Atomic Weight: 226, Category: Alkaline Earth Metal";
            case 89:
                return "Name: Actinium, Symbol: Ac, Atomic Weight: 227, Category: Actinide";
            case 90:
                return "Name: Thorium, Symbol: Th, Atomic Weight: 232.0377, Category: Actinide";
            case 91:
                return "Name: Protactinium, Symbol: Pa, Atomic Weight: 231.03588, Category: Actinide";
            case 92:
                return "Name: Uranium, Symbol: U, Atomic Weight: 238.02891, Category: Actinide";
            case 93:
                return "Name: Neptunium, Symbol: Np, Atomic Weight: 237, Category: Actinide";
            case 94:
                return "Name: Plutonium, Symbol: Pu, Atomic Weight: 244, Category: Actinide";
            case 95:
                return "Name: Americium, Symbol: Am, Atomic Weight: 243, Category: Actinide";
            case 96:
                return "Name: Curium, Symbol: Cm, Atomic Weight: 247, Category: Actinide";
            case 97:
                return "Name: Berkelium, Symbol: Bk, Atomic Weight: 247, Category: Actinide";
            case 98:
                return "Name: Californium, Symbol: Cf, Atomic Weight: 251, Category: Actinide";
            case 99:
                return "Name: Einsteinium, Symbol: Es, Atomic Weight: 252, Category: Actinide";
            case 100:
                return "Name: Fermium, Symbol: Fm, Atomic Weight: 257, Category: Actinide";
            case 101:
                return "Name: Mendelevium, Symbol: Md, Atomic Weight: 258, Category: Actinide";
            case 102:
                return "Name: Nobelium, Symbol: No, Atomic Weight: 259, Category: Actinide";
            case 103:
                return "Name: Lawrencium, Symbol: Lr, Atomic Weight: 266, Category: Actinide";
            case 104:
                return "Name: Rutherfordium, Symbol: Rf, Atomic Weight: 267, Category: Transition Metal";
            case 105:
                return "Name: Dubnium, Symbol: Db, Atomic Weight: 268, Category: Transition Metal";
            case 106:
                return "Name: Seaborgium, Symbol: Sg, Atomic Weight: 269, Category: Transition Metal";
            case 107:
                return "Name: Bohrium, Symbol: Bh, Atomic Weight: 270, Category: Transition Metal";
            case 108:
                return "Name: Hassium, Symbol: Hs, Atomic Weight: 269, Category: Transition Metal";
            case 109:
                return "Name: Meitnerium, Symbol: Mt, Atomic Weight: 278, Category: Transition Metal";
            case 110:
                return "Name: Darmstadtium, Symbol: Ds, Atomic Weight: 281, Category: Transition Metal";
            case 111:
                return "Name: Roentgenium, Symbol: Rg, Atomic Weight: 282, Category: Transition Metal";
            case 112:
                return "Name: Copernicium, Symbol: Cn, Atomic Weight: 285, Category: Transition Metal";
            case 113:
                return "Name: Ununtrium, Symbol: Uut, Atomic Weight: 286, Category: Post-Transition Metal";
            case 114:
                return "Name: Flerovium, Symbol: Fl, Atomic Weight: 289, Category: Post-Transition Metal";
            case 115:
                return "Name: Ununpentium, Symbol: Uup, Atomic Weight: 289, Category: Post-Transition Metal";
            case 116:
                return "Name: Livermorium, Symbol: Lv, Atomic Weight: 293, Category: Post-Transition Metal";
            case 117:
                return "Name: Ununseptium, Symbol: Uus, Atomic Weight: 294, Category: Metalloid";
            case 118:
                return "Name: Ununoctium, Symbol: Uuo, Atomic Weight: 294, Category: Noble Gas";
            default:
                return "No information found";
        }
    }
}