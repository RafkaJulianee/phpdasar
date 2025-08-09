# Sistem Kasir Sederhana (Console)

def tampilkan_menu(menu):
    print("=== Menu ===")
    for kode, item in menu.items():
        print(f"{kode}. {item['nama']} - Rp{item['harga']}")

def main():
    menu = {
        "1": {"nama": "Nasi Goreng", "harga": 15000},
        "2": {"nama": "Mie Ayam", "harga": 12000},
        "3": {"nama": "Es Teh", "harga": 5000},
        "4": {"nama": "Jus Jeruk", "harga": 7000}
    }
    keranjang = []
    while True:
        tampilkan_menu(menu)
        kode = input("Pilih kode menu (atau 'q' untuk selesai): ")
        if kode.lower() == 'q':
            break
        if kode in menu:
            qty = int(input("Jumlah: "))
            keranjang.append({
                "nama": menu[kode]["nama"],
                "harga": menu[kode]["harga"],
                "qty": qty,
                "total": menu[kode]["harga"] * qty
            })
        else:
            print("Kode menu tidak valid.")

    print("\n=== Struk Pembelian ===")
    total_bayar = 0
    for item in keranjang:
        print(f"{item['nama']} x{item['qty']} = Rp{item['total']}")
        total_bayar += item['total']
    print(f"Total Bayar: Rp{total_bayar}")
    bayar = int(input("Uang dibayar: Rp"))
    kembalian = bayar - total_bayar
    print(f"Kembalian: Rp{kembalian}")

if __name__ == "__main__":
    main()