using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace CRUDFinal.Models
{
    public class Patient
    {
        [Key]
        public int PatientId { get; set; }
        [Column(TypeName = "nvarchar(255)")]
        [Required]
        public string FullName { get; set; }
        [Column(TypeName = "varchar(255)")]
        public string Address { get; set; }
        [Column(TypeName = "varchar(1024)")]
        public string Phone { get; set; }
        [Column(TypeName = "varchar(20)")]
        public string SSN { get; set; }
    }
}
